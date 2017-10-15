import json
import os


class PhoebeConverter:

    def __init__(self):
        with open(os.path.join('map', 'map.json'), 'r') as json_data:
            map_list = json.load(json_data)
            self.map = {'ipa': dict(),
                        'xsampa': dict(),
                        'cft': dict()}
            for r in map_list:
                self.map['xsampa'][r[0]] = r[1]
                self.map['ipa'][r[0]] = r[2]
                self.map['cft'][r[0]] = r[3]

    def convert(self, string, system='ipa'):
        if system not in ('ipa', 'xsampa', 'cft'):
            raise ValueError("<system> must be: 'ipa' | 'xsampa' | 'cft'")

        converted = str()

        for i in string:
            converted += self.map[system][i]
        return(converted)


if __name__ == '__main__':
    p = PhoebeConverter()
    phoebe_to_convert = 'Zili bili Ded a bapka'
    converted = p.convert(phoebe_to_convert, system='ipa')
    print('original:  {0}'.format(phoebe_to_convert))
    print('converted: {0}'.format(converted))
