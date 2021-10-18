using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace WeeWoo
{
    class ZboziKs : Zbozi
    {
        readonly ulong _ksSkladem;

        public ZboziKs(string kod, string nazev, double cena, ulong ksSkladem):base(kod, nazev, cena)
        {
            _ksSkladem = ksSkladem;
        }

        public override string ToString() => base.ToString() + string.Format($"{_ksSkladem} ks").PadLeft(15);
    }
}
