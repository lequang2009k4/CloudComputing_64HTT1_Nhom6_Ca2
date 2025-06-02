import javax.jms.*;
import org.apache.activemq.ActiveMQConnectionFactory;

public class MessageProducerExample {
    public static void main(String[] args) throws Exception {
        ConnectionFactory factory = new ActiveMQConnectionFactory("tcp://localhost:61616");
        Connection connection = factory.createConnection();
        connection.start();

        Session session = connection.createSession(false, Session.AUTO_ACKNOWLEDGE);
        Topic topic = session.createTopic("foo");
        MessageProducer producer = session.createProducer(topic);

        TextMessage message = session.createTextMessage("Xin chào từ Producer!");
        producer.send(message);

        System.out.println("Đã gửi tin nhắn.");
        session.close();
        connection.close();
    }
}
