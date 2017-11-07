import random

DOORS_COUNT = 3

win1Count = 0
win2Count = 0
gamesCount = 1000000

for i in range(0, gamesCount):
    auto = [False] * DOORS_COUNT
    auto[round(random.random() * (DOORS_COUNT - 1))] = True

    if auto[round(random.random() * (DOORS_COUNT - 1))]:
        win1Count += 1
        continue

    win2Count += 1

print('Number of doors: {}'.format(DOORS_COUNT))

percent = 100 / gamesCount * win1Count
print('{} games played, {} times won the car without changing the door ({}%)'
      .format(gamesCount, win1Count, round(percent, 2)))

percent = 100 / gamesCount * win2Count
print('{} games played, {} times won the car by changing the door ({}%)'
      .format(gamesCount, win2Count, round(percent, 2)))
