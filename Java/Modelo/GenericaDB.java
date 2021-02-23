import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

public class GenericaDB {

    private Connection con;
    private static  GenericaDB instancia;
    private String url, username, password;

    public  GenericaDB() {
           
            try {
                                        
                    Class.forName("oracle.jdbc.driver.OracleDriver");
                   
                    String host = "192.168.6.172";
                    String port = "1539";
                    String database = "XE";
                    url = "jdbc:oracle:thin:@" + host + ":" + port + ":" + database;
                    username = "basegenerica";
                    password = "Nombre_Generico2020";
            }
            catch (Exception e) {
                    System.out.println("Parametros de conexion incorrectos.");
            }
    }

    public static synchronized GenericaDB getInstance() {

            if (instancia == null) {
                instancia = new  GenericaDB();
                return instancia;
            }
                    

            return null;
    }

    public synchronized Connection getConnection() throws SQLException {           
           
            if (con == null || con.isClosed()) {
                con = DriverManager.getConnection(url, username, password);
                 return con;
            }
            if (con == null) {
                System.out.println( "No hay conexion");
            } else {
                System.out.println("Conectado");
            }
                    
            return null;
    }

    public synchronized void close() throws SQLException {

            if (con != null && !con.isClosed()) {
                 con.close();
            }
                    
    }
}



