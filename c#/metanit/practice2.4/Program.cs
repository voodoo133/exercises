using System;

namespace practice2._4
{
    class Task1
    {
        class State
        {
            public decimal Population { get; set; } // население
            public decimal Area { get; set; }       // территория

            public static State operator +(State s1, State s2)
            {
                return new State
                {
                    Population = s1.Population + s2.Population,
                    Area = s1.Area + s2.Area
                };
            }

            public static bool operator <(State s1, State s2)
            {
                return s1.Area < s2.Area;
            }

            public static bool operator >(State s1, State s2)
            {
                return s1.Area > s2.Area;
            }
        }

        public Task1()
        {
            State s1 = new State { Population = 1, Area = 1 };
            State s2 = new State { Population = 2, Area = 2 };
            State s3 = s1 + s2;

            Console.WriteLine(s3.Population);
            Console.WriteLine(s3.Area);

            Console.WriteLine(s1 > s2);
            Console.WriteLine(s1 < s2);
        }
    }

    class Task2
    {
        // хлеб
        class Bread
        {
            public int Weight { get; set; } // масса

            public static Sandwich operator +(Bread bread, Butter butter)
            {
                return new Sandwich { Weight = bread.Weight + butter.Weight };
            }
        }

        // масло
        class Butter
        {
            public int Weight { get; set; } // масса
        }

        // бутерброт
        class Sandwich
        {
            public int Weight { get; set; } // масса
        }


        public Task2()
        {
            Bread bread = new Bread { Weight = 80 };
            Butter butter = new Butter { Weight = 20 };
            Sandwich sandwich = bread + butter;
            Console.WriteLine(sandwich.Weight);  // 100
        }
    }

    class Program
    {
        static void Main(string[] args)
        {
            new Task1();
        }
    }
}
