import javax.jms.*;
import org.apache.activemq.ActiveMQConnectionFactory;

public class MessageConsumerExample {
    public static void main(String[] args) throws Exception {
        ConnectionFactory factory = new ActiveMQConnectionFactory("tcp://34.124.235.249:61616");
        Connection connection = factory.createConnection();
        connection.start();

        Session session = connection.createSession(false, Session.AUTO_ACKNOWLEDGE);
        Topic topic = session.createTopic("foo");
        MessageConsumer consumer = session.createConsumer(topic);

        consumer.setMessageListener(message -> {
            if (message instanceof TextMessage) {
                try {
                    System.out.println("Recieve: " + ((TextMessage) message).getText());
                } catch (JMSException e) {
                    e.printStackTrace();
                }
            }
        });

        System.out.println("Watting messeage...");
        Thread.sleep(100000);
        session.close();
        connection.close();
    }
}
