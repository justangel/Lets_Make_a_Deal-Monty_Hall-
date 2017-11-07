function MontyHall() {
    var DOORS_COUNT = 3;

    var auto = [];
    var win1Count = 0, win2Count = 0;
    var gamesCount = 1000000;

    for (var i = 0; i < gamesCount; i++) {
        auto = [];
        auto[Math.round(Math.random() * (DOORS_COUNT - 1))] = true;

        if (auto[Math.round(Math.random() * (DOORS_COUNT - 1))]) {
            win1Count++;
            continue;
        }

        win2Count++;
    }

    document.write("Number of doors: " + DOORS_COUNT + "<br/>");

    var percent = 100 / gamesCount * win1Count;
    document.write(gamesCount + " games played, " + win1Count +
        " times won the car without changing the door (" + percent.toFixed(2) + ")<br/>");

    percent = 100 / gamesCount * win2Count;
    document.write(gamesCount + " games played, " + win2Count +
        " times won the car by changing the door (" + percent.toFixed(2) + ")<br/>");
}
