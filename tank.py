from character import *
class Tank(Character):
    def __init__(self, player, position, base_life, base_price, base_strength, troop_design):
       super().__init__(player, position, base_life, base_price, base_strength, troop_design) #appelle classe mère
       self.can_move = False
    
    def move(self):
        """
        If the character can move, move it. If it can't move, set it to be able to move next time
        """
        if(self.can_move == True):
            position = (self.position[0], self.position[1] + self.direction)
            self.game.place_character(self, position)
            self.can_move = False
        else:
            self.can_move += True
    
    def attack(self):
        """
        If the character is at the base column, it will attack the enemy base, otherwise it will attack
        the character in front of it
        """
        baseColumn = 0 if self.direction==-1 else self.game.nb_columns-1
        if self.position[1] == baseColumn:
                self.enemy.life -= self.strength*4
                self.player.team.remove(self)

        characterGot = self.game.get_character_at((self.position[0], self.position[1] + self.direction))
        if characterGot is not None:
            reward = characterGot.get_hit(self.strength)
            self.player.money += reward