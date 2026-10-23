#Importamos los paquetes de flask
from flask import Flask, render_template, request

from werkzeug.security import generate_password_hash, check_password_hash 
#Creamos una instancia de nuestra aplicacion 
app = Flask(__name__)
app.config['MYSQL_HOST'] = 'localhost'
app.config['MYSQL_USER'] = 'root'
app.config['MYSQL_PASSWORD'] = ''
app.config['MYSQL_DB'] = 'FlaskDB'
app.config["TEMPLATES_AUTO_RELOAD"]= True
app.secret_key = 'mysecretkey'

#Creacion de ruta. La ruta / es la ruta raiz, sera la que se mostrara cuando el proyecto 
@app.route("/")
def home():
    return render_template("login.html")
@app.route("/registro", method=["GET","POST"])
def registro():

    if request.method == "POST":
        nombre = request.form["nombre"]
        apellido_p = request.form["apellido_p"]
        apellido_m = request.form["apellido_m"]
        correo = request.form["correo"]
        password_hash = request.form["password_hash"]
        id_rol = request.form["id:rol"]

        password_hasheada = generate_password_hash(password_hash)

#iniciamos el servidos FLASK en el pueto 5000
if __name__ == "__main__":
    app.run(port=5000)