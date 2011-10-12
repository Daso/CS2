

package parcial.clases;

public class libro {
    String Idlibro;
    String Titulolib;
    float costo;

 //constructores

 public libro(String Idlibro,String Titulolib,float costo){
    this.Idlibro=Idlibro;
    this.Titulolib=Titulolib;
    this.costo=costo;

 }
    public String getIdlibro() {
        return Idlibro;
    }

    public void setIdlibro(String Idlibro) {
        this.Idlibro = Idlibro;
    }

    public String getTitulolib() {
        return Titulolib;
    }

    public void setTitulolib(String Titulolib) {
        this.Titulolib = Titulolib;
    }

    public float getCosto() {
        return costo;
    }

    public void setCosto(float costo) {
        this.costo = costo;
    }
}
