# It imports the class Character from the file character.py
from character import *

class Tower(Character):
    def __init__(self, player, position, base_life, base_price, base_strength, troop_design):
       super().__init__(player, position, base_life, base_price, base_strength, troop_design) #appelle classe mère
       self.can_move = False
    
    def move(self):
        # Troop can't moove. It's a tower, just returning
        return