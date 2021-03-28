using System;
using System.Linq;

namespace practice2._1
{
    class ArrayWrapper<T>
    {
        private T[] arr = new T[] {};

        public void Add(T val)
        {
            T[] newArr = new T[arr.Length + 1];

            for (int i = 0; i < arr.Length; i++)
                newArr[i] = arr[i];

            newArr[arr.Length] = val;
            arr = newArr;
        }

        public void Remove(T val)
        {
            int index = -1;

            for (int i = 0; i < arr.Length; i++) {
                if (arr[i].Equals(val)) {
                    index = i;
                    break;
                }
            }
                
            if (index != -1) {
                T[] newArr = new T[arr.Length - 1];


                for (int i = 0, j = 0; i < arr.Length; i++) {
                    if (i != index) {
                        newArr[j] = arr[i];
                        j++;
                    }
                }

                 arr = newArr;
            }
        }

        public T Get(int i)
        {
            return arr[i];
        }

        public int GetLength()
        {
            return arr.Length;
        }
    }

    class Program
    {
        static void Main(string[] args)
        {
            ArrayWrapper<int> aw = new ArrayWrapper<int>();
            
            aw.Add(1);
            aw.Add(2);
            aw.Add(3);
            aw.Add(2);

            Console.WriteLine(aw.Get(1));
            Console.WriteLine(aw.GetLength());

            Console.WriteLine("-----------------");

            aw.Remove(2);

            Console.WriteLine(aw.Get(1));
            Console.WriteLine(aw.Get(2));
            Console.WriteLine(aw.GetLength());

            Console.WriteLine("-----------------");

            aw.Remove(10);

            Console.WriteLine(aw.Get(1));
            Console.WriteLine(aw.Get(2));
            Console.WriteLine(aw.GetLength());
        }
    }
}
