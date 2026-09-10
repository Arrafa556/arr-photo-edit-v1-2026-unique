import turtle 
import time
import random


# set up the screen 
delay = 0.1
wn = turtle.Screen()
wn.title("Shake Simple @Arrafa556")
wn.bgcolor("green")
wn.setup(width=500, height=400)
wn.tracer(0)  # turn off the screen updates


# shake head 
head = turtle.Turtle()
head.speed(1)
head.shape("square")
head.color("black")
head.penup()
head.goto(0, 0)
head.direction = "stop"


# Snake food 
food = turtle.Turtle()
food.speed(0)
food.shape("circle")
food.color("red")
food.penup()
food.goto(0, 100)

segments = []


# fungsi arah
def go_up():
    head.direction = "up"

def go_down():
    head.direction = "down"

def go_left():
    head.direction = "left"

def go_right():
    head.direction = "right"

def reset_game():
    # hapus Semua Segments

    for segment in segments:
        segment.goto(1000, 1000)  # Move segments off-screen
    segments.clear()  # Remove all segments

   # hentiikan sejenak untuk melihat riset game
    time.sleep(2)

    # Kembalikan posisi head ke tengah layar 
    head.goto(0, 0)
    head.direction = "stop"


def move():
    if head.direction == "up":
        y = head.ycor()
        head.sety(y + 20)

    if head.direction == "down":
        y = head.ycor()
        head.sety(y - 20)

    if head.direction == "left":
        x = head.xcor()
        head.setx(x - 20)

    if head.direction == "right":
        x = head.xcor()
        head.setx(x + 20)
  
if head.xcor() > 240 or head.xcor() < -240 or head.ycor() > 190 or head.ycor() < -190:
    reset_game() # Reset game if head goes out of bounds




# keyboard bindings
wn.listen()
wn.onkeypress(go_up, "w")
wn.onkeypress(go_down, "s")
wn.onkeypress(go_left, "a")
wn.onkeypress(go_right, "d")
wn.onkeypress(reset_game, "r")  # Reset game with 'r' key

# Main game loop
while True:
    wn.update()

    if head.distance(food) < 20:
        # random move food to new location
        x = random.randint(-240, 240)
        y = random.randint(-190, 190)
        food.goto(x, y)

        # add a segment 
        new_segment = turtle.Turtle()
        new_segment.speed(0)
        new_segment.shape("square")
        new_segment.color("grey")
        new_segment.penup()
        segments.append(new_segment)

    for index in range(len(segments) - 1, 0, -1):
        x = segments[index - 1].xcor()
        y = segments[index - 1].ycor()
        segments[index].goto(x, y)

    if len(segments) > 0:
        x = head.xcor()
        y = head.ycor()
        segments[0].goto(x, y)

    move()
    time.sleep(delay)