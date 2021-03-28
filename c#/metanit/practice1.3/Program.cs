using System;

namespace practice1._3
{
    class Program
    {
        static void Main(string[] args)
        {
            new Task1();
        }
    }

    class Task1
    {
        public Task1()
        {
            int[,,] mas = { 
                { { 1, 2 },{ 3, 4 } }, 
                { { 4, 5 }, { 6, 7 } }, 
                { { 7, 8 }, { 9, 10 } }, 
                { { 10, 11 }, { 12, 13 } }
            };

            int x = mas.GetUpperBound(0);
            int y = mas.GetUpperBound(1);
            int z = mas.GetUpperBound(2);

            string result = "{";

            for (int i = 0; i < x + 1; i++) {
                result += "{";
                for (int j = 0; j < y + 1; j++) {
                    result += "{";
                    for (int k = 0; k < z + 1; k++) {
                        result += mas[i,j,k];

                        if (k != z) result += ",";
                    }
                    result += "}";

                    if (j != y) result += ",";
                }
                result += "}";
                
                if (i != x) result += ",";
            }
            result += "}";

            Console.WriteLine(result);
        }
    }
}
