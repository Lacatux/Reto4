import java.awt.BorderLayout;
import java.awt.EventQueue;

import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;
import javax.swing.JButton;
import javax.swing.JLabel;
import javax.swing.ImageIcon;
import java.awt.Font;
import java.awt.event.ActionListener;
import java.awt.event.ActionEvent;
import java.awt.Toolkit;

public class Menu extends JFrame {

	private JPanel contentPane;
	private JButton btnGestor;
	private JButton btnAulas;
	private JButton btnSalir;
	private JButton btnExpediente;
	private JLabel lblLogo;
	private ImageIcon logo = new ImageIcon("images\\logo.png");

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					Menu frame = new Menu();
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
	public Menu() {
		setIconImage(Toolkit.getDefaultToolkit().getImage("images\\\\logoIcono.png"));
		setTitle("GestoriAlmi");
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(100, 100, 400, 580);
		contentPane = new JPanel();
		contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));
		setContentPane(contentPane);
		contentPane.setLayout(null);
		
		btnAulas = new JButton("Aulas");
		btnAulas.setFont(new Font("Tahoma", Font.BOLD, 27));
		btnAulas.setBounds(44, 201, 299, 59);
		contentPane.add(btnAulas);
		
		btnGestor = new JButton("Gestor de datos");
		btnGestor.setFont(new Font("Tahoma", Font.BOLD, 27));
		btnGestor.setBounds(44, 287, 299, 59);
		contentPane.add(btnGestor);
		
		btnExpediente = new JButton("Expediente");
		btnExpediente.setFont(new Font("Tahoma", Font.BOLD, 27));
		btnExpediente.setBounds(44, 372, 299, 59);
		contentPane.add(btnExpediente);
		
		btnSalir = new JButton("Salir");
		btnSalir.setFont(new Font("Tahoma", Font.BOLD, 27));
		btnSalir.setBounds(44, 456, 299, 59);
		contentPane.add(btnSalir);
		
		lblLogo = new JLabel("");
		lblLogo.setIcon(logo);
		lblLogo.setBounds(71, 11, 240, 157);
		contentPane.add(lblLogo);
		
	}
}
