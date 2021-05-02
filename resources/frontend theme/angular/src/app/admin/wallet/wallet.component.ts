import { Component, OnInit } from '@angular/core';
import { Router, ActivatedRoute, Params } from '@angular/router';
import { CommonServiceService } from '../../common-service.service';

@Component({
  selector: 'app-wallet',
  templateUrl: './wallet.component.html',
  styleUrls: ['./wallet.component.css'],
})
export class WalletComponent implements OnInit {
  walletReport: any = [];
  walletHistory: any = [];
  constructor(
    public commonService: CommonServiceService
  ) {}

  ngOnInit(): void {
    this.getWalletReport();
    this.getWalletHistory();
  }

  getWalletReport() {
    this.commonService.getWalletReport().subscribe((res) => {
      this.walletReport = res;
      $(function () {
        $('table').DataTable();
      });
    });
  }

  getWalletHistory() {
    this.commonService.getWalletHistory().subscribe((res) => {
      this.walletHistory = res;
      $(function () {
        $('table').DataTable();
      });
    });
  }
}
