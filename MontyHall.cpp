#include <iostream>

using namespace std;

double round(double num, int precision);

void main()
{
	const int DOORS_COUNT = 3;

	int win1Count = 0, win2Count = 0;
	int gamesCount = 10000000;

	for (int i = 0; i < gamesCount; i++)
	{
		bool autom[DOORS_COUNT] = { false };
		autom[rand() % DOORS_COUNT] = true;

		if (autom[rand() % DOORS_COUNT])
		{
			win1Count++;
			continue;
		}

		win2Count++;
	}

	cout << "Number of doors: " << DOORS_COUNT << endl;

	double percent = (double)100 / (double)gamesCount * win1Count;
	cout << gamesCount << " games played, " << win1Count
		<< " times won the car without changing the door (" << round(percent, 2) << "%)" << endl;

	percent = (double)100 / (double)gamesCount * win2Count;
	cout << gamesCount << " games played, " << win2Count
		<< " times won the car by changing the door (" << round(percent, 2) << "%)" << endl;
}

double round(double num, int precision)
{
	return floorf(num * pow(10.0, precision) + .5) / pow(10.0, precision);
}
