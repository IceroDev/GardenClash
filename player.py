# Importing the classes from the other files.
import random
from customtroop import *
from tank import *
from thief import *
from tower import *
from goldhunter import *

class Player:

    def __init__(self, name, life, money):
        """
        PARAM : - name : str
                - life : float
                - money : float
        initialise team to empty list, game and direction to None
        """
        self.name = str(name)
        self.life = float(life)
        self.money = float(money)
        self.team = []
        self.game = None
        self.direction = None

    @property
    def is_alive(self):
        """
        It returns True if the life of the object is greater than 0.
        :return: The life of the player.
        """
        return self.life > 0

    def get_hit(self, damages):
        """
        Take the damage to life
        PARAM : - damages : float
        """
        self.life = self.life - damages

    def get_troops_list(self):
        """
        It returns a list of tuples, each tuple containing the life, price, strength, name/type, design
        and class of a troop
        :return: A list of tuples.
        """
        troops = [
            # (life, price, strength, name/type, design, class)
            (10, 4, 5, "Sunflower", "+","Fighter"),
            (10, 8, 4, "Dandelion", "@", "Thief"),
            (20, 15, 10, "Lawnmower", "#", "Tank"),
            (4, 5, 10, "Mushroom", "&", "Fighter"),
            (6, 4, 7, "Duck","=", "Fighter"),
            (1, 2, 2, "Caterpillar", "%", "Thief"),
            (30, 8, 4, "Hose reel", "¤", "Tower"),
            (4, 5, 0, "Bee", "$", "GoldHunter")
        ]
        return troops

    def new_character(self):
        """
        Ask to player where add a new Character,
        check if enough money
        and create the new one
        """
        if(self.name == "AI"):
            line = random.randint(0,6);
        else :
            line = input(
                f"\n{self.name}: Which line would you place the new one (0-{self.game.nb_lines-1}) ? (enter if none) "
            )
        troops = self.get_troops_list()
        askTroop = ""
        for i in range(0, len(troops)):
            askTroop += f"\n\t{i + 1} - {troops[i][3]} /{troops[i][5]}/ ({troops[i][4]})"
        
        if line != "":
            line = int(line)
            if(self.name == "AI"):
                troop = random.randint(0, len(troops)-1)
            else:
                troop = input(
                    f"{self.name}: Which troop do you want to place (1-{len(troops)}) ?{askTroop}\n")
                troop = int(troop) - 1
            if 0 <= line <= self.game.nb_lines-1 and 0 <= troop <= len(troops):
                if self.money >= troops[troop][1]:
                    column = 0 if self.direction == 1 else self.game.nb_columns-1
                    if(troops[troop][5] == "Fighter"):
                        CustomTroop(self, (line, column), troops[troop][0], troops[troop][1], troops[troop][2], troops[troop][4])
                    if(troops[troop][5] == "Thief"):
                        Thief(self, (line, column), troops[troop][0], troops[troop][1], troops[troop][2], troops[troop][4])
                    if(troops[troop][5] == "Tank"):
                        Tank(self, (line, column), troops[troop][0], troops[troop][1], troops[troop][2], troops[troop][4])
                    if(troops[troop][5] == "Tower"):
                        Tower(self, (line, column), troops[troop][0], troops[troop][1], troops[troop][2], troops[troop][4])
                    if(troops[troop][5] == "GoldHunter"):
                        GoldHunter(self, (line, column), troops[troop][0], troops[troop][1], troops[troop][2], troops[troop][4])
