using System;

namespace practice2._3
{
    class Task1
    {
        class Clock
    {
        public int Hours { get; set; }

        public static implicit operator int(Clock c) 
        {
            return c.Hours;
        }

        public static implicit operator Clock(int x)
        {
            return new Clock { Hours = x % 24 };
        }
    }

        public Task1()
        {
            Clock clock = new Clock();
            int val = 34;
            clock.Hours = val % 24;
            val = clock.Hours;

            Console.WriteLine(clock);
            Console.WriteLine(val);
        }
    }

    class Task2
    {
        class Celcius
        {
            public double Gradus { get; set; }

            public static implicit operator Fahrenheit(Celcius c)
            {
                return new Fahrenheit { Gradus = 9.0 / 5.0 * c.Gradus + 32.0 };
            }

            public static implicit operator Celcius(Fahrenheit f)
            {
                return new Celcius { Gradus = 5.0 / 9.0 * (f.Gradus - 32.0) };
            }
        }
        class Fahrenheit
        {
            public double Gradus { get; set; }
        }

        public Task2()
        {
            Celcius c = new Celcius { Gradus = 25 };
            Fahrenheit f = c;

            Console.WriteLine(f.Gradus);
            
            Fahrenheit ff = new Fahrenheit { Gradus = 50 };
            Celcius cc = ff;
            
            Console.WriteLine(cc.Gradus);
        }
    }

    class Task3
    {
        class Dollar
        {
            public decimal Sum { get; set; }

            public static implicit operator Euro(Dollar d)
            {
                return new Euro { Sum = d.Sum / 1.14m };
            }

            public static explicit operator Dollar(Euro e)
            {
                return new Dollar { Sum = e.Sum * 1.14m };
            }
        }
        class Euro
        {
            public decimal Sum { get; set; }
        }

        public Task3()
        {
            Dollar d = new Dollar { Sum = 5 };
            Euro e = d;

            Console.WriteLine(e.Sum);

            Euro ee = new Euro { Sum = 5 };
            Dollar dd = (Dollar)ee;

            Console.WriteLine(dd.Sum);
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
