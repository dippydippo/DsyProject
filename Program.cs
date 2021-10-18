using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace WeeWoo
{
    class Program
    {
        static void Main(string[] args)
        {
            Storage.LoadGoods();
            Console.WriteLine(Storage.ReturnGoods());
            while (1 == 1) Console.ReadLine();
        }      
    }
}
