import java.awt.Color;
import java.awt.Graphics;

public class Mesa extends Pupitre{
	private int posXini, posYini;
	
	public Mesa() {
		super();
		posXini = 0;
		posYini = 0;
	}
	public Mesa(int posX, int posY, int ancho, int alto) {
		super(posX, posY, ancho, alto);
		setColor(Color.GRAY);
		this.posXini = posX;
		this.posYini = posY;
	}//METODOS
	
	
	
	//getters y setters
	public int getPosXini() {
		return posXini;
	}
	public void setPosXini(int posXini) {
		this.posXini = posXini;
	}
	public int getPosYini() {
		return posYini;
	}
	public void setPosYini(int posYini) {
		this.posYini = posYini;
	}
}
