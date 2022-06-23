
namespace API_Timbrado___RespSharp
{
    partial class formPeticiones
    {
        /// <summary>
        /// Variable del diseñador necesaria.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Limpiar los recursos que se estén usando.
        /// </summary>
        /// <param name="disposing">true si los recursos administrados se deben desechar; false en caso contrario.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Código generado por el Diseñador de Windows Forms

        /// <summary>
        /// Método necesario para admitir el Diseñador. No se puede modificar
        /// el contenido de este método con el editor de código.
        /// </summary>
        private void InitializeComponent()
        {
            this.bttnPostRequestTimbrado = new System.Windows.Forms.Button();
            this.SuspendLayout();
            // 
            // bttnPostRequestTimbrado
            // 
            this.bttnPostRequestTimbrado.Location = new System.Drawing.Point(39, 48);
            this.bttnPostRequestTimbrado.Name = "bttnPostRequestTimbrado";
            this.bttnPostRequestTimbrado.Size = new System.Drawing.Size(273, 34);
            this.bttnPostRequestTimbrado.TabIndex = 0;
            this.bttnPostRequestTimbrado.Text = "Post";
            this.bttnPostRequestTimbrado.UseVisualStyleBackColor = true;
            this.bttnPostRequestTimbrado.Click += new System.EventHandler(this.bttnPostRequestTimbrado_Click);
            // 
            // formPeticiones
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 16F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(628, 330);
            this.Controls.Add(this.bttnPostRequestTimbrado);
            this.Name = "formPeticiones";
            this.Text = "Peticiones API Timbrado";
            this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.Button bttnPostRequestTimbrado;
    }
}

