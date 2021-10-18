using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.IO;

namespace WeeWoo
{
    static class Storage
    {
        static List<Zbozi> Goods = new List<Zbozi>();

        static void AddGoods(Zbozi zbozi)
        {
            Goods.Add(zbozi);
        }

        static public void LoadGoods()
        {
            StreamReader sr = new StreamReader("Zbozi.csv");

            using (sr)
            {
                while (!sr.EndOfStream)
                {
                    string line = sr.ReadLine();
                    string[] values = line.Split(';');
                    try
                    {
                         ZboziKs x = new ZboziKs(values[0], values[1], double.Parse(values[2]), ulong.Parse(values[3]));
                         AddGoods(x);
                    }
                    catch (Exception)
                    {
                        throw;
                    }
                   
                }
            }
            sr.Close();
        }

        public static string ReturnGoods()
        {
            string txt = "";
            foreach (Zbozi x in Goods) txt += x.ToString() + "\n";
            return txt;
        }
    }
}
