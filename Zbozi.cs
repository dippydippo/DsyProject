using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace WeeWoo
{
    abstract class Zbozi
    {
        protected string _kod;
        protected string _nazev;
        protected double _cena;

        public Zbozi(string kod, string nazev, double cena)
        {
            _kod = kod;
            _nazev = nazev;
            _cena = cena;
        }

        public override string ToString() => string.Format($"{_nazev} ({_kod})").PadRight(30) + string.Format($"{_cena} Kč").PadLeft(15);
    }
}
