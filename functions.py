import webbrowser
from console import gametitle, clear, gametitle_big
from game import *


def menu(option = None):
    #print(gametitle_big)
    while True:
        clear()
        print(gametitle_big)
        option = int(input("1 - Play (PVP)\n2 - Play (PVE)\n3 - Informations\n4 - GitHub repository (will open in your default browser)\n5 - Quit\n\nEnter your choice ~> "))
        if (option == 1):
            clear()
            player0 = Player("Player 1", 100, 100)
            player1 = Player("Player 2", 100, 100)
            game = Game(player0, player1)
            game.play()

        if(option == 2):
            clear()
            player0 = Player("Player 1", 100, 100)
            player1 = Player("AI", 100, 100)
            game = Game(player0, player1)
            game.play()

        if(option == 3):
            clear()
            print(
                gametitle_big + f"\n\nThe Game : \n\n{gametitle} is a turn-based strategy game. Each player has the same fleet of fighters with different characteristics. The goal of the game is to get troops to survive to another player's base in order to do damage. Each player starts with 100 life points and 100 dollars. The Player can get money by killing other characters.\n\nThe winning player is the first one who manages to weaken his opponent to 0.\n\n\nClasses of fighters\n\nCombatants have different classes giving them advantages and disadvantages, here is a list: \n\n    - Fighters : The basic class, it gives neither advantages nor disadvantages, the statistics displayed in the action menu are those used throughout the game.\n\n    - Thieves : The thief class mainly allows you to steal money from your opponent. A thief reaching a base will steal between 1 and 2 dollars while against any other character he will steal between 1 and 6 dollars. To defend or not to defend. That is the question.\n\n    - Tanks : The tank class grants a huge attack benefit. A tank is twice as slow as a character of other classes but will attack the base with twice as much damage as he has in his base stats and will attack twice! A significant advantage!\n\n    - Towers : Towers are very good defensive elements. With their many HP, they can take blows in addition to defending by putting some damage to the enemies.\n\n    - Gold Hunters : Gold Hunters are non-attacking troops (they are 100% pacifist and 100% organic!) They have a 50/50 chance each turn of collecting between $1 and $2. A good way to get a little money back.\n"
            )
            input("Press enter to go back to menu...")

        if(option == 4):
            webbrowser.open('https://github.com/IceroDev/GardenClash', new=2)

        if(option == 5):
            exit()


