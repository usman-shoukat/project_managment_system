import {
  Component,
  OnInit,
  ChangeDetectorRef,
  ChangeDetectionStrategy,
  AfterViewInit,
  ViewEncapsulation,
  AfterViewChecked,
} from '@angular/core';
import {
  Event,
  NavigationStart,
  Router,
  ActivatedRoute,
} from '@angular/router';
import { Location, PlatformLocation } from '@angular/common';
import { CommonServiceService } from './common-service.service';
import { ToastrService } from 'ngx-toastr';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  changeDetection: ChangeDetectionStrategy.OnPush,
  styleUrls: ['./app.component.css'],
  encapsulation: ViewEncapsulation.None,
})
export class AppComponent implements OnInit, AfterViewChecked {  
  url;
  loadFooter = false;
  show: boolean = true;
  hideFooter: boolean = false;
  splitVal;
  base = '';
  page = '';
  constructor(
    private activeRoute: ActivatedRoute,
    private changeDetector: ChangeDetectorRef,
    public Router: Router,
    location: Location,
    private toastr: ToastrService,
    public commonService: CommonServiceService,
    platform: PlatformLocation
  ) {
    Router.events.subscribe((event: Event) => {
      if (event instanceof NavigationStart) {
        this.splitVal = event.url.split('/');
        this.base = this.splitVal[1];
        this.page = this.splitVal[2];
        if (this.base === 'admin') {
          this.show = false;
          this.hideFooter = true;          
        } else {
           if (event.url === '/message') {
              this.hideFooter = true;
            } 
          }
        }
    });
  }
  ngOnInit() {
    setTimeout(() => (this.loadFooter = true), 2000);
  }
  ngAfterViewChecked() {
    this.changeDetector.detectChanges();
  }
  

}
