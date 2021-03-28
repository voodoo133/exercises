using System;

namespace practice1._2
{
    class Program
    {
        static void Main(string[] args)
        {
            new Task4();
        }
    }

    class Task1
    {
        public Task1()
        {
            Console.WriteLine("Введите сумму вклада");
            decimal sum = Convert.ToDecimal(Console.ReadLine());

            Console.WriteLine("Введите кол-во месяцев");
            int months = Convert.ToInt32(Console.ReadLine());

            for (int i = 0; i < months; i++)
                sum += 0.07m * sum;

            Console.WriteLine("Итого: " + sum);
        }
    }

    class Task2
    {
        public Task2()
        {
            Console.WriteLine("Введите сумму вклада");
            decimal sum = Convert.ToDecimal(Console.ReadLine());

            Console.WriteLine("Введите кол-во месяцев");
            int months = Convert.ToInt32(Console.ReadLine());

            int i = 0;

            while(i++ < months) {
                sum += 0.07m * sum;
            }

            Console.WriteLine("Итого: " + sum);
        }
    }

    class Task3
    {
        public Task3()
        {
            for (int i = 1; i <=9; i++) {
                for (int j = 1; j <= 9; j++) {
                    Console.WriteLine($"{i} x {j} = {i * j}");
                }
                Console.WriteLine("-------------------------");
            }
        }
    }

    class Task4 
    {
        public Task4()
        {
            int a, b;
            while (true) {
                Console.WriteLine("Введите первое число (от 0 до 10): ");
                a = Convert.ToInt32(Console.ReadLine());

                if (a >=0 && a <= 10) break;
            }

            while (true) {
                Console.WriteLine("Введите второе число (от 0 до 10): ");
                b = Convert.ToInt32(Console.ReadLine());

                if (b >=0 && b <= 10) break;
            }

            Console.WriteLine($"Результат: {a * b}");
        }
    }
}
