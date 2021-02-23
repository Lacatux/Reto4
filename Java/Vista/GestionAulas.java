import java.awt.BorderLayout;
import java.awt.EventQueue;
import java.awt.Graphics;

import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;
import java.awt.GridBagLayout;
import java.awt.GridBagConstraints;
import java.awt.Canvas;
import java.awt.Insets;
import java.awt.GridLayout;
import java.awt.Image;

import javax.swing.JLabel;
import java.awt.Color;

import javax.imageio.ImageIO;
import javax.swing.JButton;
import javax.swing.JList;
import java.awt.event.ActionListener;
import java.awt.image.BufferedImage;
import java.io.File;
import java.io.IOException;
import java.awt.event.ActionEvent;
import javax.swing.JScrollBar;

public class GestionAulas extends JFrame {

	private JPanel contentPane;
	private JScrollBar scrollBar;
	private JList ListaNombres;
	private JButton btnLimpiar;
	private JButton btnSalir;
	private JButton btnLefth;
	private JButton btnUp;
	private JButton btnRigth;
	private JButton btnDown;
	//CANVAS
	private AreaDibujo areaDibujo;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					GestionAulas frame = new GestionAulas();
					frame.setVisible(true);
				} catch (Exception e) {
					e.printStackTrace();
				}
			}
		});
	}

	/**
	 * Create the frame.
	 */
	public GestionAulas() {
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(100, 100, 991, 617);
		contentPane = new JPanel();
		contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));
		setContentPane(contentPane);
		contentPane.setLayout(new GridLayout(0, 2, 0, 0));
		
		JPanel panel = new JPanel();
		contentPane.add(panel);
		panel.setLayout(null);
		
		JButton btnGuardar = new JButton("Guardar");
		btnGuardar.setBounds(37, 68, 89, 28);
		panel.add(btnGuardar);
		
		btnLimpiar = new JButton("Limpiar");
		btnLimpiar.setBounds(37, 159, 89, 28);
		panel.add(btnLimpiar);
		
		btnSalir = new JButton("Salir");
		btnSalir.setBounds(37, 267, 89, 28);
		panel.add(btnSalir);
		
		ListaNombres = new JList();
		ListaNombres.setBounds(212, 68, 167, 227);
		panel.add(ListaNombres);
		
		JButton btnNewButton_3 = new JButton(">>");
		btnNewButton_3.setBounds(401, 159, 59, 26);
		panel.add(btnNewButton_3);
		
		btnUp = new JButton("^");
		btnUp.setBounds(192, 398, 75, 34);
		panel.add(btnUp);
		
		btnLefth = new JButton("<");
		btnLefth.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
			}
		});
		btnLefth.setBounds(121, 443, 75, 34);
		panel.add(btnLefth);
		
		btnRigth = new JButton(">");
		btnRigth.setBounds(274, 443, 75, 34);
		panel.add(btnRigth);
		
		btnDown = new JButton("v");
		btnDown.setBounds(192, 488, 75, 34);
		panel.add(btnDown);
		
		scrollBar = new JScrollBar();
		scrollBar.setBounds(362, 68, 17, 227);
		panel.add(scrollBar);
		
		//CANVAS
		
		areaDibujo= new AreaDibujo(this);
		contentPane.add(areaDibujo);
		
	}//FIN DEL CONSTRUCTOR
	
}
