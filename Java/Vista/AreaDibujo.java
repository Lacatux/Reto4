import java.awt.Canvas;
import java.awt.Graphics;
import java.awt.image.BufferedImage;
import java.io.File;
import java.io.IOException;

import javax.imageio.ImageIO;
import javax.swing.JPanel;

public class AreaDibujo extends Canvas {

	// gestion aulas
	private GestionAulas gestionAulas;
	private Pupitre[] arrayPupitres;
	private Mesa[] arrayMesas;
	private BufferedImage fondo;

	/**
	 * Create the panel.
	 */
	public AreaDibujo(GestionAulas gestionaulas) {
		this.gestionAulas = gestionaulas;
		// CANVAS IMG
		try {

			this.fondo = ImageIO.read(new File("images\\aula.jpg"));
			this.repaint();

		} catch (IOException e1) {
			// TODO Auto-generated catch block
			e1.printStackTrace();
		}

	}// FIN CONSTRUCTOR

	public void aula(Graphics g) {
		g.drawImage(fondo, 0, 0, getWidth(), getHeight(), null);
	}
	//DEIBUJAR MESAS Y PUPITRES Y DARLE EL FONDO AL CONSTRUCTOR
	@Override
	public void paint(Graphics g) {
		
		//MESAS Y PUPITRES
		super.paint(g);
		aula(g);
		if(arrayMesas != null) {
			for (Mesa mesa : arrayMesas) {
				mesa.dibujar(g);
			}
			for (Pupitre pupitre : arrayPupitres) {
				pupitre.dibujar(g);
			}
		}
	}

	// METODOS
	public void crearPupitres() {
		int corX = 10;
		int corY = 10;
		arrayPupitres = new Pupitre[20];
		for (int i = 0; i < arrayPupitres.length; i++) {
			arrayPupitres[i] = new Pupitre(corX, corY, 40, 40);
		}
	}

	public void crearMesas() {
		int corX = 0;
		int corY = 0;
		arrayMesas = new Mesa[20];
		for (int i = 0; i < arrayMesas.length; i++) {
			if (i == 0) {
				arrayMesas[i] = new Mesa(30, 60, 70, 70);
			} else if (i % 3 == 0) {
				corX = arrayMesas[i - 3].getPosX();
				corY = arrayMesas[i - 3].getPosY() + arrayMesas[i - 3].getAlto() + 3;
				arrayMesas[i] = new Mesa(corX, corY, 70, 70);
			} else if (i == 6) {
				corX = arrayMesas[i - 3].getPosX() + 20;
				corY = arrayMesas[i - 3].getPosY() + arrayMesas[i - 3].getAlto() + 3;
				arrayMesas[i] = new Mesa(corX, corY, 70, 70);
			} else if (i == 12) {
				corX = arrayMesas[i - 3].getPosX();
				corY = arrayMesas[i - 3].getPosY()+ 20 + arrayMesas[i - 3].getAlto() + 3;
				arrayMesas[i] = new Mesa(corX, corY, 70, 70);
			} else {
				corX = arrayMesas[i - 1].getPosX() + arrayMesas[i - 1].getAncho() + 3;
				corY = arrayMesas[i - 1].getPosY();
				arrayMesas[i] = new Mesa(corX, corY, 70, 70);
			}

		}

	}

}
