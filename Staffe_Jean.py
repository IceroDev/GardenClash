# Importing all the functions from the other files.
from player import *
from game import *
from character import *
from customtroop import *
from tank import *
from thief import *
from functions import *

# A way to make sure that the code in the main file is only executed when the file is run directly.
if __name__ == "__main__":
    clear()
    menu()