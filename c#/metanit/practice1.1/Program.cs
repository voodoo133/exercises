// https://metanit.com/sharp/practice/1.1.php

using System;

namespace practice1._1
{
    class Program
    {
        static void Main(string[] args)
        {
            new Task7();
        }
    }

    class Task1
    {
        public Task1()
        {
            Console.WriteLine("Введите 1-ое число: ");
            int a = Convert.ToInt32(Console.ReadLine());

            Console.WriteLine("Введите 2-ое число: ");
            int b = Convert.ToInt32(Console.ReadLine());

            if (a == b)
            {
                Console.WriteLine("Оба числа равны");
            }
            else if (a > b)
            {
                Console.WriteLine("1-ое число больше 2-ого");
            }
            else
            {
                Console.WriteLine("2-ое число больше 1-ого");
            }
        }
    }

    class Task2
    {
        public Task2()
        {
            Console.WriteLine("Введите число: ");
            int num = Convert.ToInt32(Console.ReadLine());

            if (num > 5 && num < 10)
            {
                Console.WriteLine("Число больше 5 и меньше 10");
            }
            else
            {
                Console.WriteLine("Неизвестное число");
            }
        }
    }

    class Task3
    {
        public Task3()
        {
            Console.WriteLine("Введите число: ");
            int num = Convert.ToInt32(Console.ReadLine());

            if (num == 5 || num == 10)
            {
                Console.WriteLine("Число либо равно 5, либо равно 10");
            }
            else
            {
                Console.WriteLine("Неизвестное число");
            }
        }
    }

    class Task4
    {
        public Task4()
        {

            Console.WriteLine("Введите сумму: ");
            double sum = Convert.ToDouble(Console.ReadLine());

            double resultSum = 0;

            if (sum < 100) resultSum = sum + 0.05 * sum;
            if (sum >= 100 && sum <= 200) resultSum = sum + 0.07 * sum;
            if (sum > 200) resultSum = sum + 0.1 * sum;

            Console.WriteLine("Итого: " + resultSum);
        }
    }

    class Task5
    {
        public Task5()
        {
            Console.WriteLine("Введите сумму: ");
            double sum = Convert.ToDouble(Console.ReadLine());

            double resultSum = 0;

            if (sum < 100) resultSum = sum + 0.05 * sum;
            if (sum >= 100 && sum <= 200) resultSum = sum + 0.07 * sum;
            if (sum > 200) resultSum = sum + 0.1 * sum;

            resultSum += 15;

            Console.WriteLine("Итого: " + resultSum);
        }
    }

    class Task6
    {
        public Task6()
        {
            Console.WriteLine("Введите номер операции:\n1.Сложение\n2.Вычитание\n3.Умножение");

            byte numOperation = Convert.ToByte(Console.ReadLine());

            switch (numOperation)
            {
                case 1:
                    Console.WriteLine("Сложение");
                    break;

                case 2:
                    Console.WriteLine("Вычитание");
                    break;

                case 3:
                    Console.WriteLine("Умножение");
                    break;

                default:
                    Console.WriteLine("Операция неопределена");
                    break;
            }
        }
    }

        class Task7
    {
        public Task7()
        {
            Console.WriteLine("Введите 1-ое число: ");
            int a = Convert.ToInt32(Console.ReadLine());

            Console.WriteLine("Введите 2-ое число: ");
            int b = Convert.ToInt32(Console.ReadLine());

            Console.WriteLine("Введите номер операции:\n1.Сложение\n2.Вычитание\n3.Умножение");
            byte numOperation = Convert.ToByte(Console.ReadLine());

            switch (numOperation)
            {
                case 1:
                    Console.WriteLine("Результат: " + (a + b));
                    break;

                case 2:
                    Console.WriteLine("Результат: " + (a - b));
                    break;

                case 3:
                    Console.WriteLine("Результат: " + (a * b));
                    break;

                default:
                    Console.WriteLine("Операция неопределена");
                    break;
            }
        }
    }
}
