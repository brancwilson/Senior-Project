#include <iostream>
using namespace std;

int main()
{
	// added this variable initialization, you might already have it in your code
	int amount_scores = 0;

	cout << "Scores Calculator" << endl << endl << endl;
	cout << "How many scores will you enter?: ";
	cin >> amount_scores;
	cout << endl << endl;

	// will be set to 'false' once the scores are displayed, which will break the while loop below
	bool run_loop = true;

	// makes everything inside repeat until run_loop set to 'false'
	while (run_loop == true)
	{
		// moved these variable initializations to be inside the main while loop so that they are reset everytime the loop starts
		int i = 1;
		int count = 0;
		double score_number;
		double total_sum = 0;
		int average_score = 0;

		do
		{

			count += 1;
			cout << "Enter score number " << count << ": ";
			cin >> score_number;
			cout << endl << endl;

			total_sum += score_number;
			average_score = total_sum / amount_scores;



			if (score_number < 1 || score_number > 100)
			{
				cout << "Score needed to be between 1 and 100. Try again." << endl << endl;

				// changed 'continue'; to 'break' so that the whole loop will restart rather than continue from last point
				break;
			}
			++i;

		} while (i <= amount_scores);

		if (score_number >= 1 && score_number <= 100)
		{

			cout << "Total sum of scores: ";
			cout << total_sum << endl << endl;

			cout << "Average of scores: ";
			cout << average_score << endl << endl << endl;

			// everything is complete, so run_loop is set to false to stop the loop and end the program
			run_loop = false;

		}

	}

}