using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using RestSharp;

namespace API_Timbrado___RespSharp
{
    public partial class formPeticiones : Form
    {
        public formPeticiones()
        {
            InitializeComponent();
        }

        private void bttnPostRequestTimbrado_Click(object sender, EventArgs e)
        {   //variable client que indica la direccion/url de la api a consumir
            var client = new RestClient("https://qasisvapiscti.azure-api.net/isv/v1/massivestamping/files/stampone");
            client.Timeout = -1;
            //variable request, indica el tipo de metodo que usaremos para la peticion, en este caso POST
            var request = new RestRequest(Method.POST);
            //agregamos los encabezados que la API nos solicita
            //License-Code: corresponde a la licencia de la identidad
            request.AddHeader("License-Code", "7A94A7A5");
            //Content-Type: corresponde al tipo de lenguaje en el que se envia el contenido, JSON es el requerido
            request.AddHeader("Content-Type", "application/json");
            //Subscription-Key: corresponde a la clave privada que se otorga a la cuenta que se suscribe al servicio de timbrado
            request.AddHeader("Subscription-Key", "2de2bdd4dffb45fead117d1398f77ece");

            //el cuerpo de la petición tambien requiere de ciertos parametros ya que así lo solicita la API
            //se agredan @@ para permitir el uso de "" ya que el body contiene texto
            //se agregan \n solo para tener una mejor estructura en el formato
            var body = @"{" + "\n" +
            //fileName: corresponde al nombre del archivo XML que se intentara timbrar
            @"    'fileName': ""DV CFDI33 - Comprobante 1.xml""," + "\n" +
            //fileSizeInBytes: corresponde al tamaño exacto en bytes del archivo que se intentara timbrar
            @"    'fileSizeInBytes': 4415," + "\n" +
            //rfc: corresponde a un RFC con estructura valida, por el momento no se valida si existe o si
            ////es el registrado en el XML o en la cuenta solo que tenga una estructura valida
            @"    'rfc': ""AES010101AE0""" + "\n" +
            @"}";
            //se agrega como parametro el body
            request.AddParameter("application/json", body, ParameterType.RequestBody);
            //se ejecuta la petición request a la URL mediante el metodo asignado
            IRestResponse response = client.Execute(request);
            Console.WriteLine(response.Content);
        }
    }
}
