import javax.jms.*;
import org.apache.activemq.ActiveMQConnectionFactory;

public class MessageProducerExample {
    public static void main(String[] args) throws Exception {
        // Kết nối tới ActiveMQ server công khai
        ConnectionFactory factory = new ActiveMQConnectionFactory("tcp://34.124.235.249:61616");
        Connection connection = factory.createConnection();
        connection.start();

        Session session = connection.createSession(false, Session.AUTO_ACKNOWLEDGE);
        Topic topic = session.createTopic("foo"); // tên topic
        MessageProducer producer = session.createProducer(topic);

        TextMessage message = session.createTextMessage("Xin chào từ Producer (IP công khai)!");
        producer.send(message);

        System.out.println("✅ Đã gửi tin nhắn đến ActiveMQ server 34.124.235.249.");
        session.close();
        connection.close();
    }
}
