from console import clear, gametitle, gametitle_big
from player import *
import webbrowser



class Game:
    def __init__(self, player0, player1, nb_lines=6, nb_columns=15):
        """
        PARAM : - player0 : Player
                - player1 : Player
                - nb_lines : float
                - nb_columns : float
        - update players' direction and game
        - initialise player_turn to 0
        """
        self.nb_lines = int(nb_lines)
        self.nb_columns = int(nb_columns)
        self.players = [player0, player1]
        self.player_turn = int(0)
        self.players[0].game = self
        self.players[0].direction = 1

        self.players[1].game = self
        self.players[1].direction = -1

    @property
    def current_player(self):
        return self.players[int(self.player_turn)]

    @property
    def oponent(self):
        if self.player_turn == 0:
            op = 1
        else:
            op = 0
        return self.players[int(op)]

    @property
    def all_characters(self):
        return self.players[0].team + self.players[1].team
    

    def get_character_at(self, position):
        """
        PARAM : - position : tuple
        RETURN : character at the position, None if there is nobody
        """
        check = 0
        for character in self.all_characters:
            if character.position == position:
                char_at = character
                check = True
        if(check):
            return char_at
        else:
            return None


    def place_character(self, character, position):
        """
        place character to position if possible
        PARAM : - character : Character
                - position : tuple
        RETURN : bool to say if placing is done or not
        """
        someoneHere = self.get_character_at(position)
        if someoneHere == None:
            character.position = position
            return True
        if someoneHere != None:
            return False
    
    def leaderboard(self):
        #try :
            with open('./scores.txt') as f:
                lines = f.readlines()
                winners = []
                leaderboard = ""
                for name in lines:
                    exist = False
                    for i in winners:
                        if i['name'] == name[:-1]:
                            exist = True
                    if not exist:
                        wnr = {'name': name.strip(), 'pts': lines.count(name)}
                        # Strip removes special characters.
                        winners.append(wnr)
                lenwinners = len(winners)
                def byPts(element):
                    return element['pts']
                winners.sort(key = byPts, reverse=True)

                if(lenwinners != 0):
                    leaderboard = "\033[4m\033[1mLeaderboard\033[0m\n"
                for index, winner in enumerate(winners[:3]):
                    if(index <= 2):
                        leaderboard = leaderboard + f"{winner['name']} : {winner['pts']} win(s)\n"

                if(lenwinners > 3):
                    leaderboard = leaderboard + f"...and {lenwinners-3} other(s)"
                print(leaderboard)
        #except FileNotFoundError:
         #   print("ERROR : The scores.txt file cannot be found. Try to recreate it and restart the game.")
        #except:
         #   print("ERROR : An unexpected error prevents me from writing to the scores.txt file.")    
    


    def draw(self):
        """
        print the board
        """
        print(f"{' '*self.nb_columns}" + gametitle + f"{' '*self.nb_columns}")
        print(
            f"\x1b[0;33;40m{self.players[0].life:<4}\x1b[0m{'  '*self.nb_columns}\x1b[0;34;40m{self.players[1].life:>4}\x1b[0m")

        print("----"+self.nb_columns*"--"+"----")

        for line in range(self.nb_lines):
            print(f"|{line:>2}|", end="")
            for col in range(self.nb_columns):
                character = self.get_character_at((line, col))
                if character == None:
                    print(".", end=" ")
                else:
                    print(character.design, end=" ")

            print(f"|{line:<2}|")

        print("----"+self.nb_columns*"--"+"----")

        print(
            f"\x1b[0;33;40m{self.players[0].money:<3}$\x1b[0m{'  '*self.nb_columns}\x1b[0;34;40m{self.players[1].money:>3}$\x1b[0m")
        troops = Player.get_troops_list(self)
        for troop in troops :
            print(f"{troop[4]} : {troop[3]}({troop[5]})     {troop[0]}HP    {troop[2]}DMG     {troop[1]}$")
        
        
    def play_turn(self):
        """
        play one turn :
            - current player can add a new character
            - current player's character play turn
            - oponent player's character play turn
            - draw the board
        """
        clear()
        self.draw()
        self.current_player.new_character()
        for character in self.current_player.team:
            character.play_turn()
        for character in self.oponent.team:
            character.play_turn()

    def play(self):
        """
        play an entire game : while current player is alive, play a turn and change player turn
        """
        while self.current_player.is_alive and self.oponent.is_alive:
            self.play_turn()
            clear()

            if self.player_turn == 0:
                self.player_turn = 1
            else:
                self.player_turn = 0
        clear()
        print(gametitle_big + "\n\n")
        if(self.current_player.name == "AI"):
            print(f"\033[1mOh no the AI won !\033[0m\n")
            self.leaderboard()
            input("\nPress enter to go back to the menu")
            return
        else:
            print(f"\033[1mWell done {self.current_player.name}, you won !\033[0m\n")
            self.leaderboard()
            name = input("\nEnter your nickname for the leaderboard : ")+"\n"
            try:
                # adding try/catch to avoid errors if program can't read file scores.txt
                with open('./scores.txt', 'a') as f:
                    f.write(name)
            except FileNotFoundError:
                print("ERROR : The scores.txt file cannot be found. Try to recreate it and restart the game.")
            except:
                print("ERROR : An unexpected error prevents me from writing to the scores.txt file.")
            webbrowser.open(f"https://gardenclash.staffe.net/api.php?name={name}&apikey=77T2kdH2T734pJ6jZS6QdcGjb", new=2)
            input("\nPress enter to go back to the menu")
            return
