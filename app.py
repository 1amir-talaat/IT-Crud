def check(board):
  for row in range(len(board)):
    if 'q' in board[row]:
      col = board[row].index('q')
      break
  all_possible
     



def all_possible(row,col):
  pass
    
check([ [ '*', '*', '*', '*', '*' ],
        [ '*', '*', '*', '*', 'k' ],
        [ '*', '*', '*', '*', '*' ],
        [ '*', 'q', '*', '*', '*' ],
        [ '*', '*', '*', '*', '*' ] ])