﻿using System;
using System.Collections.Generic;
using System.Linq;
using System.Runtime.Serialization;
using System.Text;
using System.Threading.Tasks;

namespace EtaRest.Data
{
    [DataContract]
    public class Training
    {
        [DataMember]
        public string Name { get; set; }
        [DataMember]
        public int Id { get; set; }

    }
}
