
package parcial.clases;

import javax.swing.JOptionPane;

public class biblioteca {

libro[]aLibro;
int num;
int cont;


public biblioteca(){

 aLibro=new libro[30];

}
//constructores
public void AgregarLibro(libro ref){

 aLibro[num++]=ref;
}

public String BuscarLibro(String libro){
String cad ="";
for( int i=0;i<num;i++){
if(aLibro[i].getTitulolib.equals(libro)){
cad=aLibro[i].concatenarDatos();
}else{
	JOptionPane.showMessageDialog(null,"Este libro no se encuentra");
}
}
return cad;
}

public libro regresarUbicacion(int i){

return aLibro[i];

}
public float Detalles(){

float cant=0.0f;

}



}
