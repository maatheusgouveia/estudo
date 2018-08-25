
package models;

import com.mysql.jdbc.Connection;
import java.math.BigInteger;
import java.security.MessageDigest;
import java.security.NoSuchAlgorithmException;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.swing.JOptionPane;

public class DB { 
  private final String  dbHost="//localhost/";
  private final String  dbName="loja";
  private final String  dbUser="root";
  private final String  dbPass="";
  private       String  query;
  private  ArrayList<String> params = new ArrayList<String> ();
  public Connection conn;
  private PreparedStatement stmt;
  
  
   public DB(){
      try {
          //carrega a classe do banco
          Class.forName("com.mysql.jdbc.Driver");
          
        try {
              this.conn=(Connection) DriverManager.getConnection("jdbc:mysql:"+this.dbHost+this.dbName,this.dbUser,this.dbPass);
          } catch (SQLException ex) {
              System.out.println("Erro ao se conectar com o banco");
          }
          
      } catch (ClassNotFoundException ex) {
          System.out.println("Classe do banco não encontrada");
      }
      
   }
   
   
   public boolean insert(String table,String [][] params)  {
   
        int n = params[0].length-1;
        String repeated = new String(new char[n]).replace("\0", "?,");
        this.query="INSERT INTO "+table+"("+String.join(",",params[0])+")VALUES("+repeated+"?)";
        
        try { 
               this.stmt = this.conn.prepareStatement(this.query);
            } catch (SQLException ex) {
               System.out.println("Erro ao preparar a sql na classse DB->insert");
            }
        
        for (int i = 0; i < params[1].length; i++) {
            int n1= i+1;
        try {
                this.stmt.setString(n1,params[1][i]);
            } catch (SQLException ex) {
                System.out.println("Erro ao preparar a sql na classse DB->insert ");
            }
        }
        
        try {  
            if(this.stmt.executeUpdate()==1){
                   return true;
             }
         } catch (SQLException ex) {
          System.out.println("Erro ao executar a sql nom DB->insert");
      }
    
       return false;
           
    }
    
      public ResultSet select(String query, String[] values) {
            //seta a query passada como paranetros
            this.query=query;
            //cria uma variavel que armazena os resultados do banco
            ResultSet rs = null; 
            //bloco para tratamento de erros
            try { 
                   //prepara a query ou seja carrega ela 
                   this.stmt = conn.prepareStatement(this.query);
                } catch (SQLException ex) {
                   //caso aja algum erro imprima na tela
                   System.out.println("Erro ao executar a sql nom DB->select");
                } 
                //caso os valores sejam maior que 0 então seta os valores
                if(values.length>0){
                    try {
                         //loop para setar os valores caso aja
                         for (int i = 1; i<= values.length; i++) {
                            //seta os valores
                            this.stmt.setString(i,values[(i-1)]);
                        }
                          
                        }catch (SQLException ex) {
                           //caso aja algum erro imprima na tela
                           System.out.println("Erro ao preparar os parametros em DB->select");
                        }
                }
            try {
                //executa a query e armazena na variavel
                 rs = this.stmt.executeQuery();
                 //retorna os valores caso aja
                 return rs;

             } catch (SQLException ex) {
                    //caso aja algum erro imprima na tela
                 Logger.getLogger(DB.class.getName()).log(Level.SEVERE, null, ex);
             }
             //retorna os valores caso aja
            return rs;
            
           
    }
      
      
    public boolean delete(String query,String [] values){
            this.query=query;
            ResultSet rs = null; 
            try {
                   this.stmt = conn.prepareStatement(this.query);
                } catch (SQLException ex) {
                   System.out.println("Erro ao executar a sql nom DB->select");
                } 
            
                if(values.length>0){
                    try {
                         for (int i = 1; i<= values.length; i++) {
                            this.stmt.setString(i,values[(i-1)]);
                        }
                          
                        }catch (SQLException ex) {
                           System.out.println("Erro ao preparar os parametros em DB->select");
                        }
                }
          
                int row = 0;
                try {
                    row = this.stmt.executeUpdate();
                } catch (SQLException ex) {
                    Logger.getLogger(DB.class.getName()).log(Level.SEVERE, null, ex);
                }
                if(row>0){
                    return true;
                }else{
                   return false;
                }

            
           
    }
               
     
    public  String md5(String input) {
		
		String md5 = null;
		
		if(null == input) return null;
		
		try {
			
		//Create MessageDigest object for MD5
		MessageDigest digest = MessageDigest.getInstance("MD5");
		
		//Update input string in message digest
		digest.update(input.getBytes(), 0, input.length());

		//Converts message digest value in base 16 (hex) 
		md5 = new BigInteger(1, digest.digest()).toString(16);

		} catch (NoSuchAlgorithmException e) {
		}
		return md5;
	}
   
   
}
