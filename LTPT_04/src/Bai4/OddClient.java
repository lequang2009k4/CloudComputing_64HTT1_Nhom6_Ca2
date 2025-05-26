package Bai4;


import java.rmi.Naming;
import java.util.Random;

public class OddClient {
    public static void main(String[] args) {
        try {
            int[] clientArray = new int[20];
            Random r = new Random();
            for (int i = 0; i < 20; i++) {
                clientArray[i] = r.nextInt(10);
            }
            
        
            System.out.print("Mang: ");
            for (int value : clientArray) {
                System.out.print(value + " ");
            }
            System.out.println();

            OddService oddService = (OddService) Naming.lookup("rmi://192.168.1.7:1099/OddService");
            // Naming.lookup tìm và lấy đối tượng đã đăng ký từ xa 
            int[] odds = oddService.findOdds(clientArray);

            System.out.print("Cac so le trong mang: ");
            for (int odd : odds) {
                System.out.print(odd + " ");
            }
            System.out.println();

        } catch (Exception e) {
            e.printStackTrace();
        }
       
    
    }
}