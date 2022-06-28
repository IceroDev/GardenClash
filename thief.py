from character import *
import random
class Thief(Character):
    def __init__(self, player, position, base_life, base_price, base_strength, troop_design):
       super().__init__(player, position, base_life, base_price, base_strength, troop_design) #appelle classe mère
    
    def attack(self):
        """
        The function attack() is used to attack the enemy and steal money from him
        """
        baseColumn = 0 if self.direction==-1 else self.game.nb_columns-1
        characterGot = self.game.get_character_at((self.position[0], self.position[1] + self.direction))
        super()
        random_stolen = 0
        if self.position[1] == baseColumn:
            random_stolen = random.randint(1, 2)
        if characterGot is not None:
            random_stolen = random.randint(1, 10)
        self.enemy.money -= random_stolen
        self.player.money += random_stolen