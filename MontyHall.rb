DOORS_COUNT = 3

win_1_count = 0
win_2_count = 0
games_count = 1000000

games_count.times do
  auto = DOORS_COUNT.times.map {false}
  auto[rand(DOORS_COUNT)] = true

  if auto[rand(DOORS_COUNT)]
    win_1_count += 1
    next
  end

  win_2_count += 1
end

puts 'Number of doors: %s' % [DOORS_COUNT]

percent = 100.0 * win_1_count / games_count
puts '%s games played, %s times won the car without changing the door (%s%%)' %
         [games_count, win_1_count, percent.round(2)]

percent = 100.0 * win_2_count / games_count
puts '%s games played, %s times won the car by changing the door (%s%%)' %
         [games_count, win_2_count, percent.round(2)]
