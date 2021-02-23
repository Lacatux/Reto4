import java.awt.Color;
import java.awt.Graphics;

public class Pupitre {
	private int alto, ancho;
	private int posX, posY;
	private Color color;
	public Pupitre() {
		posX = 0;
		posY = 0;
		ancho = 10;
		alto = 10;
		color = Color.cyan;
	}
	public Pupitre(int posX, int posY, int ancho, int alto) {
		this.posX = posX;
		this.posY = posY;
		this.ancho = ancho;
		this.alto = alto;
		this.color = Color.cyan;
	}//METODOS
	public void dibujar(Graphics g) {
		g.setColor(color);
		g.fillRect(posX, posY, ancho, alto);
		
	}
	
	//GETTERS Y SETTERS
	public int getAlto() {
		return alto;
	}
	public void setAlto(int alto) {
		this.alto = alto;
	}
	public int getAncho() {
		return ancho;
	}
	public void setAncho(int ancho) {
		this.ancho = ancho;
	}
	public int getPosX() {
		return posX;
	}
	public void setPosX(int posX) {
		this.posX = posX;
	}
	public int getPosY() {
		return posY;
	}
	public void setPosY(int posY) {
		this.posY = posY;
	}
	public Color getColor() {
		return color;
	}
	public void setColor(Color color) {
		this.color = color;
	}
}
