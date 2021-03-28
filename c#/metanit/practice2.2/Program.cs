using System;

namespace practice2._2
{
    class Task1
    {
        class Footballer
        {
            public string Name { get; set; }
            public int Number { get; set; }
        }

        class FootballTeam
        {
            private Footballer[] footballers = new Footballer[11];

            public Footballer this[int i]
            {
                get
                {
                    return footballers[i];
                }
                set
                {
                    footballers[i] = value;
                }
            }
        }

        public Task1()
        {
            FootballTeam ft = new FootballTeam();
            ft[0] = new Footballer { Name = "Name1", Number = 1 };
            ft[1] = new Footballer { Name = "Name2", Number = 2 };

            Console.WriteLine(ft[0].Number);
            Console.WriteLine(ft[1].Name);
        }
    }

    class Task2
    {
        class Player
        {
            public string Name { get; set; } // имя
            public int Number { get; set; } // номер
        }
        class Team
        {
            Player[] players = new Player[11];

            public Player this[int index]
            {
                get
                {
                    return (index >= 0 && index <= players.Length) ? players[index] : null;
                }
                set
                {
                    if (index >= 0 && index <= players.Length)
                        players[index] = value;
                }
            }
        }

        public Task2()
        {
            Team inter = new Team();
            inter[20] = new Player { Name = "Ronaldo", Number = 9 };
        }
    }

    class Task3
    {
        class Word
        {
            public string Source { get; }
            public string Target { get; set; }
            public Word(string source, string target)
            {
                Source = source;
                Target = target;
            }
        }
        class Dictionary
        {
            Word[] words;
            public Dictionary()
            {
                words = new Word[]
                {
                    new Word("red", "красный"),
                    new Word("blue", "синий"),
                    new Word("green", "зеленый")
                };
            }

            public string this[string s]
            {
                get 
                {
                    Word word = null;

                    foreach (Word w in words)
                    {
                        if (w.Source == s) {
                            word = w;
                            break;
                        }
                    }

                    return word?.Target;
                }
                set
                {
                    foreach (Word w in words)
                    {
                        if (w.Source == s) {
                            w.Target = value;
                            break;
                        }
                    }
                }
            }
        }
        public Task3()
        {
            var d = new Dictionary();
            Console.WriteLine(d["red"]);
            d["red"] = "Красный 1";
            Console.WriteLine(d["red"]);
        }
    }

    class Program
    {
        static void Main(string[] args)
        {
            new Task3();
        }
    }
}
