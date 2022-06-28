class Character:
    
    base_price = 1
    base_life = 10
    base_strength = 5
    
    def __init__(self, player, position, base_life, base_price, base_strength, troop_design):
        """
        PARAM : - player : Player
                - position : tuple
        Set player to player in param.
        Set life, strength and price to base_life, base_strength and base_price.
        Place th character at the position
        If OK : add the current character to the player's team and take the price
        """
        self.player = player
        self.base_life = base_life
        self.base_price = base_price
        self.base_strength = base_strength
        self.life = base_life
        self.price = base_price
        self.strength = base_strength

        self.troop_design = troop_design

        self.remove_money(position)
        
    def remove_money(self, position): 
        """
        If the player has enough money, the character is placed on the board and the player's money is
        reduced by the character's base price
        
        :param position: a tuple of (x, y) coordinates
        """
        ok = self.game.place_character(self, position)
        if ok:
            self.player.team.append(self)
            self.player.money -= self.base_price

    @property
    def direction(self):
        """
        It returns the direction of the player
        :return: The direction of the player.
        """
        return self.player.direction

    @property
    def game(self):
        """
        This function returns the game that the player is playing.
        :return: The game attribute of the player attribute of the self object.
        """
        return self.player.game

    @property
    def enemy(self):
        """
        If the direction of the player is 1, then the enemy is the second player, otherwise the enemy is
        the first player
        :return: The player object.
        """
        if self.direction == 1:
            player = self.game.players[1]
        else:
            player = self.game.players[0]
        return player

    @property
    def design(self):
        """
        If the direction is 1, then the design is yellow, otherwise it's blue
        :return: The design of the troop.
        """
        if self.direction == 1:
            design = "\x1b[0;33;40m"+self.troop_design+"\x1b[0m"
        else:
            design = "\x1b[0;34;40m"+self.troop_design+"\x1b[0m"
        return design

    def move(self):
        """
        the character move one step front
        """
        position = (self.position[0], self.position[1] + self.direction)
        self.game.place_character(self, position)

    def get_hit(self, damages):
        """
        Take the damage to life. If dead, the character is removed from his team and return reward
        PARAM : damages : float
        RETURN : the reward due to hit (half of price if the character is killed, 0 if not)
        """
        self.life -= float(damages)
        if self.life > 0:
            reward = 0
        else:
            reward = self.price / 2
            self.player.team.remove(self)

        return reward
    
    def attack(self):
        """
        If the character is at the base column, it attacks the enemy base. Otherwise, it attacks the
        character in front of it
        """
        baseColumn = 0 if self.direction==-1 else self.game.nb_columns-1
        if self.position[1] == baseColumn:
                self.enemy.life -= self.strength
                self.player.team.remove(self)

        characterGot = self.game.get_character_at((self.position[0], self.position[1] + self.direction))
        if characterGot is not None:
            reward = characterGot.get_hit(self.strength)
            self.player.money += reward

    def play_turn(self):
        """
        play one turn : move and attack
        """
        self.move()
        self.attack()

    def __str__(self):
        """
        return a string represent the current object
        """
        return "character (" + self.price+"$) - HP : " + self.life + " - Strength : " + self.strength