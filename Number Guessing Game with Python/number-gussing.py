import random as r
#create a range of random number between 1-100
n = r.randrange(1,100)
#to take input to enter a number
guess = int(input("Enter any number : "))
print(guess)
while n!=guess:
    if guess <n:
        print("Too low")
        guess = int(input("Enter number again: "))
    elif guess > n:
        print("Too high")
        guess = int(input("Enter number again: "))
    else:
        break

print("You Guessed it right")    

