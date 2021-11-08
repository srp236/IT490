import logging

try: 
    #wrap system code here if error occured  it will catch it
    print("hello world") 
except Exception as e:
    log_file_path = logfile.txt
    logging.basicConfig(filename = log_file_path,level=logging.INFO,format='%(asctime)s:%(levelname)s:%(message)s')
    #logs the error on the log file 
    logging.error(e)

