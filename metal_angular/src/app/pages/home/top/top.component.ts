import { Component, OnInit } from '@angular/core';
import {animate, keyframes, state, style, transition, trigger} from '@angular/animations';
import {TopAnimation} from './top.animation';
import {of} from 'rxjs';
import {saveAs} from 'file-saver';
import FileSaver from 'file-saver';

@Component({
  selector: 'app-top',
  templateUrl: './top.component.html',
  styleUrls: ['./top.component.scss'],
  animations: [TopAnimation]
})
export class TopComponent implements OnInit {
  arc = 'false';
  private setting = {
    element: {
      dynamicDownload: null as HTMLElement
    }
  }

  constructor() {

  }

  ngOnInit(): void {

  }
  toggleBounce(){
    this.arc = this.arc === 'false' ? 'true' : 'false';
  }
  fakeValidateUserData() {
    return of({
      userDate1: 1,
      userData2: 2
    });
  }
  private dyanmicDownloadByHtmlTag(arg: {
    fileName: string,
    text: string
  }) {
    if (!this.setting.element.dynamicDownload) {
      this.setting.element.dynamicDownload = document.createElement('a');
    }
    const element = this.setting.element.dynamicDownload;
    const fileType = arg.fileName.indexOf('.json') > -1 ? 'text/json' : 'text/plain';
    element.setAttribute('href', `data:${fileType};charset=utf-8,${encodeURIComponent(arg.text)}`);
    element.setAttribute('download', arg.fileName);

    const event = new MouseEvent('click');
    element.dispatchEvent(event);
  }
  dynamicDownloadTxt() {
    this.fakeValidateUserData().subscribe((res) => {
      this.dyanmicDownloadByHtmlTag({
        fileName: 'My Report',
        text: JSON.stringify(res)
      });
    });

  }

  dynamicDownloadJson() {
    this.fakeValidateUserData().subscribe((res) => {
      this.dyanmicDownloadByHtmlTag({
        fileName: 'My Report.json',
        text: JSON.stringify(res)
      });
    });
  }

  saveFile() {
    const blob = new Blob(['Hello, world!'], {type: 'text/plain;charset=utf-8'});
    FileSaver.saveAs(blob, 'hello world.txt');
  }
}
