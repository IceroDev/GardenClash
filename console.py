from os import system, name

def clear():
    # Windows computers
    if (name == 'nt'):
        _ = system("cls")

    # Mac & Linux
    else:
        _ = system("clear")


def coloured_name(gametitle):
    coloured_name = ""
    count = 0
    for lettre in gametitle:
        if (count <= len(gametitle) / 2):
            coloured_name = coloured_name + "\x1b[0;33;40m" + lettre + "\x1b[0m"
        else:
            coloured_name = coloured_name + "\x1b[0;34;40m" + lettre + "\x1b[0m"
        count = count + 1
    return coloured_name


gametitle = coloured_name("Garden'Clash")
gametitle_big = """\x1b[0;33;40m
   ______               __          _  ________           __  
  / ____/___ __________/ /__  ____ ( )/ ____/ /___ ______/ /_ 
 / / __/ __ `/ ___/ __  / _ \/ __ \|// /   / / __ `/ ___/ __ \ 
/ /_/ / /_/ / /  / /_/ /  __/ / / / / /___/ / /_/ (__  ) / / /
\____/\__,_/_/   \__,_/\___/_/ /_/  \____/_/\__,_/____/_/ /_/ 
\x1b[0m\x1b[0;34;40m
             __
             \ \ 
              \ \ 
               \ \ 
                \/`\ 
                |   \   _+,_
                 \   (_[____]_
                  '._|.-._.-._] /////////////////////
 ^^^^^^^^^^^^^^^^^^^^'-' '-'^^^^^^^^^^^^^^^^^^^^^^^^^\x1b[0m
"""