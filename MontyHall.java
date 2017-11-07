import java.util.Random;

public class Main {
    public static void main(String[] args) {
        Random random = new Random();
        final int DOORS_COUNT = 3;

        boolean[] auto;
        int win1Count = 0, win2Count = 0;
        int gamesCount = 10_000_000;

        for (int i = 0; i < gamesCount; i++)
        {
            auto = new boolean[DOORS_COUNT];
            auto[random.nextInt(DOORS_COUNT)] = true;

            if (auto[random.nextInt(DOORS_COUNT)])
            {
                win1Count++;
                continue;
            }

            win2Count++;
        }

        System.out.println(String
                .format("Number of doors: %d", DOORS_COUNT));
        double percent = 100d / gamesCount * win1Count;
        System.out.println(String
                .format("%d games played, %d times won the car " +
                        "without changing the door (%.2f%%)",
                        gamesCount, win1Count, percent));
        percent = 100d / gamesCount * win2Count;
        System.out.println(String
                .format("%d games played, %d times won the car " +
                        "by changing the door (%.2f%%)",
                        gamesCount, win2Count, percent));
    }
}
