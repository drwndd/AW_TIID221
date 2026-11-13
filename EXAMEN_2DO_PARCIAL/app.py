#Librerias
from flask import Flask, redirect, render_template, request, url_for
from flask_mysqldb import MySQL


# CREAR APLICACION
app = Flask(__name__)

app.config["TEMPLATES_AUTO_RELOAD"] = True


# CONEXION A MYSQL
app.config['MYSQL_HOST'] = 'localhost'
app.config['MYSQL_USER'] = 'root'
app.config['MYSQL_PASSWORD'] = ''
app.config['MYSQL_DB'] = 'crud_directorio'

app.secret_key = 'mysecretkey'

#INICIALIZAR LA CONEXION
mysql = MySQL(app)

# RUTA PRINCIPAL: READ
@app.route('/')
def index():
    con = mysql.connection.cursor()
    con.execute('SELECT * FROM tb_directorio')
    conDirectorio = con.fetchall()
    print (conDirectorio)
    return render_template('index.html', listDirectorio= conDirectorio)

@app.route('/guardar', methods=['POST'])
def guardar():
    if request.method == 'POST':
        nombre= request.form['txtNombre']
        apellido= request.form['txtApellido']
        telefono= request.form['txtTelefono']
        correo= request.form['txtCorreo']
        direccion= request.form['txtDireccion']
        print(nombre, apellido, telefono, correo, direccion)

        """ CONEXION A LA BD Y EJECUCION DEL INSERT """
        con = mysql.connection.cursor()
        con.execute('INSERT INTO tb_directorio (nombre, apellido, telefono, correo, direccion) VALUES (%s, %s, %s, %s, %s)', (nombre, apellido, telefono, correo, direccion))
        mysql.connection.commit()
    return 'El contacto fue registrado en el directorio'
    return redirect(url_for('index'))

   


# EJECUTAR APLICACION 
if __name__ == '__main__':
    app.run(debug=True)
