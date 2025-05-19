package BAI3;

import java.io.*;
import java.net.*;

public class Server {
    public static void main(String[] args) {
        try {
            ServerSocket server = new ServerSocket(1234);
            System.out.println("Server đang chạy... Chờ client kết nối");
            Socket socket = server.accept();
            System.out.println("Client đã kết nối");

            ObjectInputStream input = new ObjectInputStream(socket.getInputStream());
            ObjectOutputStream output = new ObjectOutputStream(socket.getOutputStream());
            System.out.println("Đã tạo luồng vào/ra");

            int[] data = (int[]) input.readObject();
            System.out.print("Client gửi: ");
            for (int x : data) {
                System.out.print(x + " ");
            }
            System.out.println();
            output.writeObject(data);
            System.out.print("Server trả về: ");
            for (int x : data) {
                System.out.print(x + " ");
            }
            System.out.println();

            socket.close();
            server.close();
        } catch (Exception e) {
            System.out.println("Lỗi: " + e.getMessage());
        }
    }
}
