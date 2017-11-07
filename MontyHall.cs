using System;

class Program
{
    static void Main()
    {
        Random random = new Random();
        const int DOORS_COUNT = 3;

        bool[] auto;
        int win1Count = 0, win2Count = 0;
        int gamesCount = 10_000_000;

        for (int i = 0; i < gamesCount; i++)
        {
            auto = new bool[DOORS_COUNT];
            auto[random.Next(0, DOORS_COUNT)] = true;

            if (auto[random.Next(0, DOORS_COUNT)])
            {
                win1Count++;
                continue;
            }

            win2Count++;
        }

        Console.WriteLine(String
            .Format("Number of doors: {0}", DOORS_COUNT));

        double percent = 100d / gamesCount * win1Count;
        Console.WriteLine(String
            .Format("{0} games played, {1} times won the car " +
                    "without changing the door ({2}%)",
                    gamesCount, win1Count, percent.ToString("0.00")));

        percent = 100d / gamesCount * win2Count;
        Console.WriteLine(String
            .Format("{0} games played, {1} times won the car " +
                    "by changing the door ({2}%)",
                    gamesCount, win2Count, percent.ToString("0.00")));
    }
}
