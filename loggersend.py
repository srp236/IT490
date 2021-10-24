import pika
import sys

connection = pika.BlockingConnection(pika.ConnectionParameters('localhost'))
channel = connection.channel()

channel.queue_declare = 'logs', exchange_type='fanout')

channel.queue_bind(exchange='logs',
                   queue=result.method.queue)

message = ' '.join(sys.argv[1:]) or "no logs available"
channel.basic_publish(exchange='logs', routing_key='', body=message)

print("[x] Sent %r" % message)

connection.close()

